<div class="card-inner">
                                                
                                                <form action="#">
                                                    <div class="row g-4">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                
                                                                <label class="form-label" for="email-address-1">Pays </label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2">
                                                                        <option value="default_option">Côte d'IVoire</option>
                                                                        {{-- <option value="option_select_name"></option> --}}
                                                                    </select>
                                                                </div>                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                

                                                                <label class="form-label" for="pay-amount-1">Objet de l'accès au port </label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" multiple="multiple" data-placeholder="Select Multiple options">
                                                                        {{-- <option value="default_option">Default Option</option> --}}
                                                                        <option value="Ravitaillement">Ravitaillement</option>
                                                                        <option value="Débarquement">Débarquement</option>
                                                                        <option value="Transbordement">Transbordement</option>
                                                                        <option value="Escale Technique">Escale Technique</option>
                                                                        <option value="Autre">Autre </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">Date de la dernière escale
                                                                <label class="form-label" for="phone-no-1"></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-calendar-alt"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control date-picker" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name-1">Port d'escale</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select  options">
                                                                        
                                                                        <option value="option_select_name">Abidjan</option>
                                                                        <option value="option_select_name">San-Pedro</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label class="form-label">Date d'arrivée estimée</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-calendar-alt"></em>
                                                                </div>
                                                                <input type="text" class="form-control date-picker" >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                            <label class="form-label"><span><em class="icon ni ni-clock"></em></span> Heure d'arrivée estimée </label>
                                                            <div class="row g-4">
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select js-select2" data-placeholder="Select Multiple options" id="outlined-default1">
                                                                                @for ($i = 1; $i <= 24; $i++)
                                                                                    @if ($i<10)
                                                                                        <option value="option_select_name">0{{$i}}H</option> 
                                                                                    @endif
                                                                                    @if ($i>=10)
                                                                                        <option value="option_select_name">{{$i}}</option> 
                                                                                    @endif 
                                                                                @endfor
                                                                            
                                                                            </select> 
                                                                            <label class="form-label-outlined" for="outlined-default1">Heure </label>
                                                                        </div>
                                                                    </div>
                                                                 </div>
                                                        
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            
                                                                            <select class="form-select js-select2" data-placeholder="Select Multiple options" id="outlined-default">
                                                                                 @for ($i = 0; $i <= 60; $i++)
                                                                                    @if ($i<10)
                                                                                        <option value="option_select_name">0{{$i}}</option> 
                                                                                    @endif
                                                                                    @if ($i>=10)
                                                                                        <option value="option_select_name">{{$i}}</option> 
                                                                                    @endif 
                                                                                @endfor
                                                                            
                                                                            </select>
                                                                            <label class="form-label-outlined" for="outlined-default">Min</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </form>
                                     
                                            </div>

