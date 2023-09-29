<?php

namespace App\Http\Livewire;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;


class Utilisateurs extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    // public $currentPage = PAGELIST;

    public $newUser = [];
    public $editUser = [];

    public $rolePermissions = [];

    public $currentPage = USERPAGEACCUEIL; // ici initialiser la variable qui sera renseigner pour indiquer la valeur de la page à afficher côté user

    // protected $messages = [
    //     'newUser.nom.required' => "le nom de l'utilisateur est requis.",
    // ];

    // protected $validationAttributes = [
    //     'newUser.telephone1' => 'numero de telephone 1',
    //     'newUser.prenom' => 'firstname',
    // ];

    public function render()
    {

        Carbon::setLocale("fr");

        $this->setCurrentPageView();

        $users = DB::table('users')->get();

        return view('livewire.amateur.index', [
            "users" => $users ,// User::latest()->paginate(10)
            // "currentPage"=> $this->currentPage
           
        ])
        ->extends("layouts.master")
        ->section("content");

    }

    //*************Ici ces deux fonctions m'aident à setuper la page courrente à afficher****************** */

    public function setCurrentPageView()
     {
        $nameRequest= request()->route()->getName();

        if(myContains($nameRequest, "usersdemande")){
            $this->currentPage = USERDEMANDELISTE;
        }
    }


    function myContains($container, $contenu){
        return Str::contains($container,$contenu);
    }




    //---Ecrit par Moi
    // cette fonction permet d'appliquer des règles de vérification sur les champs reçues depuis
    // la vue  
    // public function rules(){
    //     if($this->currentPage == PAGEEDITFORM){

    //         // 'required|email|unique:users,email Rule::unique("users", "email")->ignore($this->editUser['id'])
    //         return [
    //             'editUser.nom' => 'required',
    //             'editUser.prenom' => 'required',
    //             'editUser.email' => ['required', 'email', Rule::unique("users", "email")->ignore($this->editUser['id']) ] ,
    //             'editUser.telephone1' => ['required', 'numeric', Rule::unique("users", "telephone1")->ignore($this->editUser['id']) ]  ,
    //             'editUser.pieceIdentite' => ['required'],
    //             'editUser.sexe' => 'required',
    //             'editUser.numeroPieceIdentite' => ['required', Rule::unique("users", "pieceIdentite")->ignore($this->editUser['id']) ],
    //         ];
    //     }

    //     return [
    //         'newUser.nom' => 'required',
    //         'newUser.prenom' => 'required',
    //         'newUser.email' => 'required|email|unique:users,email',
    //         'newUser.telephone1' => 'required|numeric|unique:users,telephone1',
    //         'newUser.pieceIdentite' => 'required',
    //         'newUser.sexe' => 'required',
    //         'newUser.numeroPieceIdentite' => 'required|unique:users,numeroPieceIdentite',
    //     ];
    // }

    // //---Ecrit par Moi
    // // active le formulaire permettant de créer un utilisateur
    // public function goToAddUser(){
    //     $this->currentPage = PAGECREATEFORM;
    // }

    // //---Ecrit par Moi
    // // active le formulaire permettant d'éditer un utilisateur
    // public function goToEditUser($id){
    //     $this->editUser = User::find($id)->toArray();
    //     $this->currentPage = PAGEEDITFORM;

    //     $this->populateRolePermissions();
    // }


    // //---Ecrit par Moi
    // // Remplir les deux collections ci-dessous depuis la base de données selon l'Id de l'User puis les envoie dans la vue
    // public function populateRolePermissions(){
    //     $this->rolePermissions["roles"] = [];
    //     $this->rolePermissions["permissions"] = [];

    //     $mapForCB = function($value){
    //         return $value["id"];
    //     };

    //     $roleIds = array_map($mapForCB, User::find($this->editUser["id"])->roles->toArray()); // [1, 2, 4]
    //     $permissionIds = array_map($mapForCB, User::find($this->editUser["id"])->permissions->toArray()); // [1, 2, 4]

    //     foreach(Role::all() as $role){
    //         if(in_array($role->id, $roleIds)){
    //             array_push($this->rolePermissions["roles"], ["role_id"=>$role->id, "role_nom"=>$role->nom, "active"=>true]);
    //         }else{
    //             array_push($this->rolePermissions["roles"], ["role_id"=>$role->id, "role_nom"=>$role->nom, "active"=>false]);
    //         }
    //     }

    //     // foreach(Permission::all() as $permission){
    //     //     if(in_array($permission->id, $permissionIds)){
    //     //         array_push($this->rolePermissions["permissions"], ["permission_id"=>$permission->id, "permission_nom"=>$permission->nom, "active"=>true]);
    //     //     }else{
    //     //         array_push($this->rolePermissions["permissions"], ["permission_id"=>$permission->id, "permission_nom"=>$permission->nom, "active"=>false]);
    //     //     }
    //     // }


    //     // la logique pour charger les roles et les permissions
    // }

    // //---Ecrit par Moi
    // // Ici il fait un enregistrement dans la table conçu exprès pour la relation plusieurs à plusieurs 
    // // L'enregistrement ici est de faire une mise à jour de la table role_user
    // public function updateRoleAndPermissions(){
    //     DB::table("user_role")->where("user_id", $this->editUser["id"])->delete();
    //     DB::table("user_permission")->where("user_id", $this->editUser["id"])->delete();

    //     foreach($this->rolePermissions["roles"] as $role){
    //         if($role["active"]){
    //             User::find($this->editUser["id"])->roles()->attach($role["role_id"]);
    //         }
    //     }

    //     foreach($this->rolePermissions["permissions"] as $permission){
    //         if($permission["active"]){
    //             User::find($this->editUser["id"])->permissions()->attach($permission["permission_id"]);
    //         }
    //     }

    //     $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Roles et permissions mis à jour avec succès!"]);
    // }

    // public function goToListUser(){
    //     $this->currentPage = PAGELIST;
    //     $this->editUser = [];
    // }

    // //---Ecrit par Moi
    // // Ici il ajoute un utilisateur dans la base donnée
    // public function addUser(){

    //     // Vérifier que les informations envoyées par le formulaire sont correctes
    //     $validationAttributes = $this->validate();

    //     $validationAttributes["newUser"]["password"] = "password";

    //     //dump($validationAttributes);
    //     // Ajouter un nouvel utilisateur
    //     User::create($validationAttributes["newUser"]);

    //     $this->newUser = [];

    //     $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur créé avec succès!"]);
    // }

    // public function updateUser(){
    //     // Vérifier que les informations envoyées par le formulaire sont correctes
    //     $validationAttributes = $this->validate();


    //     User::find($this->editUser["id"])->update($validationAttributes["editUser"]);

    //     $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur mis à jour avec succès!"]);

    // }

    // //---Ecrit par Moi
    // // Il envoie une alert de confirmation à l'écouteur Js dans la vue
    // public function confirmPwdReset(){
    //     $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
    //         "text" => "Vous êtes sur le point de réinitialiser le mot de passe de cet utilisateur. Voulez-vous continuer?",
    //         "title" => "Êtes-vous sûr de continuer?",
    //         "type" => "warning"
    //     ]]);
    // }

    // //---Ecrit par Moi
    // // Il met à joiur le password de l'utilisateur dans la bd selon l'user concerné
    // public function resetPassword(){

    //     User::find($this->editUser["id"])->update(["password" => Hash::make(DEFAULTPASSOWRD)]);
    //     $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Mot de passe utilisateur réinitialisé avec succès!"]);
    // }

    // //---Ecrit par Moi
    // // Il envoie une alert de confirmation à l'écouteur Js dans la vue pour la suppression d'un utilislateur 
    // public function confirmDelete($name, $id){
    //     $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
    //         "text" => "Vous êtes sur le point de supprimer $name de la liste des utilisateurs. Voulez-vous continuer?",
    //         "title" => "Êtes-vous sûr de continuer?",
    //         "type" => "warning",
    //         "data" => [
    //             "user_id" => $id
    //         ]
    //     ]]);
    // }

    // //---Ecrit par Moi
    // //il supprime l'utilisateur puis envoie un message dans la vue pour informer que l'user à été supprimé
    // public function deleteUser($id){
    //     User::destroy($id);

    //     $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur supprimé avec succès!"]);
    // }
}
