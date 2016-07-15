angular
  .module('acumuladorApp', []).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
    })
  .controller("acumuladorAppCtrl", controladorPrincipal);

function controladorPrincipal(){
    
  var vm = this;
  vm.numPaq = 0;
  
  vm.sumar = function(){
    vm.numPaq += parseInt(vm.cuanto);
  }; 
};