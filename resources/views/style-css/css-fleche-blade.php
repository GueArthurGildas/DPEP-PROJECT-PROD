<style>

    
.arrow-with-bar {
    display: flex;
    align-items: center;
}

.bar {
    width: 100px;
    height: 30px;
    background-color: orangered;
    position: relative;
    z-index: 2;
}

.arrow {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 20px 0 20px 30px;
    border-color: transparent transparent transparent orangered;
    position: relative;
    z-index: 1;
}

</style>