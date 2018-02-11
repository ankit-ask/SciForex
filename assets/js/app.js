var app = angular.module('Angular',[]);

app.controller('currencyconverterINR', ['$scope', '$http', function($scope, $http){
  $scope.rates = [];
  $scope.rate = 0;
  $scope.netamt = 0;
  $scope.name = "";
  $scope.val = 0;
  // var request = $http.get('http://www.apilayer.net/api/live?access_key=ee040ca51241f80ed66ea5c37042d5ff&format=1');    
  // request.success(function(data) {
  //     $scope.rates = data;
  // });
  // request.error(function(data){
  //     console.log('Error: ' + data);
  // });

  $http({
        method: 'GET',
        url: 'http://www.apilayer.net/api/live?access_key=ee040ca51241f80ed66ea5c37042d5ff&format=1'
  }).then(function (success){
        $scope.rates = success.data;
  },function (error){
        console.log('Error: ' + data);
  });

  $scope.showHint1 = function(temp, val){
    if(temp == 'USD'){
      $scope.rate = $scope.rates["quotes"]["USDINR"];
      $scope.val = val;
      $scope.netamt = val * $scope.rate;
    }
    else if(temp == 'EUR'){
      $scope.rate = $scope.rates["quotes"]["USDEUR"];
      $scope.netamt = (val/$scope.rate) * $scope.rates["quotes"]["USDINR"];
    }
    else if(temp == 'AED'){
      $scope.rate = $scope.rates["quotes"]["USDAED"];
      $scope.netamt = (val/$scope.rate) * $scope.rates["quotes"]["USDINR"];
    }

    $scope.netamt = parseFloat(Math.round($scope.netamt * 100) / 100).toFixed(2);
    // $scope.rate = $scope.rates["quotes"][temp];
    // $scope.netamt = (val/$scope.rate) * $scope.rates["quotes"]["USDINR"];
  }

  $scope.calValue1 = function(val){
    if($scope.rate == $scope.rates["quotes"]["USDINR"]){
       $scope.netamt = val * $scope.rate;
    }
    else{
       $scope.netamt = (val/$scope.rate) * $scope.rates["quotes"]["USDINR"]; 
    }

    $scope.netamt = parseFloat(Math.round($scope.netamt * 100) / 100).toFixed(2);
  }

}]);

// app.controller('currencyconverterother', ['$scope', '$http', function($scope, $http){
//   $scope.rates = [];
//   $scope.rate2 = 0;
//   $scope.netamt2 = 0;
//   $scope.name2 = "";
//   $scope.val2 = 0;
//   var request = $http.get('http://www.apilayer.net/api/live?access_key=ee040ca51241f80ed66ea5c37042d5ff&format=1');    
//   request.success(function(data) {
//       $scope.rates = data;
//   });
//   request.error(function(data){
//       console.log('Error: ' + data);
//   });

//   $scope.showHint2 = function(temp, val){
//     $scope.rate2 = $scope.rates["quotes"][temp];
//     $scope.netamt2 = (val/$scope.rates.quotes.USDINR) * $scope.rate2;
//   }

//   $scope.calValue2 = function(val){
//     $scope.netamt2 = (val/$scope.rates.quotes.USDINR) * $scope.rate2;
//   }

// }]);

// app.controller('liveRates', ['$scope', '$http', function($scope, $http){
//   $scope.rates = [];
//   var request = $http.get('http://www.apilayer.net/api/live?access_key=ee040ca51241f80ed66ea5c37042d5ff&format=1');    
//   request.success(function(data) {
//       $scope.rates = data;
//   });
//   request.error(function(data){
//       console.log('Error: ' + data);
//   });

// }]);

app.controller('liveRates', function ($scope, $http, $timeout){
   $scope.rates = [];
   $scope.usd = 0;
   $scope.eur = 0;
   $scope.aed = 0;
   $scope.aud = 0;
   $scope.gbp = 0;
   $scope.sgd = 0;

   $scope.init = function() {
    // alert("aman");
     $http({
        method: 'GET',
        url: 'http://www.apilayer.net/api/live?access_key=ee040ca51241f80ed66ea5c37042d5ff&format=1'
     }).then(function (success){
          $scope.rates = success.data;
          $scope.usd = $scope.rates["quotes"]["USDINR"];
          $scope.eur = (1/$scope.rates["quotes"]["USDEUR"]) * $scope.rates["quotes"]["USDINR"];
          $scope.eur = parseFloat(Math.round($scope.eur * 100) / 100).toFixed(6);
          $scope.aed = (1/$scope.rates["quotes"]["USDAED"]) * $scope.rates["quotes"]["USDINR"];
          $scope.aed = parseFloat(Math.round($scope.aed * 100) / 100).toFixed(6);
          $scope.aud = (1/$scope.rates["quotes"]["USDAUD"]) * $scope.rates["quotes"]["USDINR"];
          $scope.aud = parseFloat(Math.round($scope.aud * 100) / 100).toFixed(6);
          $scope.gbp = (1/$scope.rates["quotes"]["USDGBP"]) * $scope.rates["quotes"]["USDINR"];
          $scope.gbp = parseFloat(Math.round($scope.gbp * 100) / 100).toFixed(6);
          $scope.sgd = (1/$scope.rates["quotes"]["USDSGD"]) * $scope.rates["quotes"]["USDINR"];
          $scope.sgd = parseFloat(Math.round($scope.sgd * 100) / 100).toFixed(6);
     },function (error){
          console.log('Error: ' + data);
     });

       $timeout(function(){
        $scope.init();
        },5000)
    };
    // $scope.init();

});


// app.directive('capitalize', function() {
//   return {
//     require: 'ngModel',
//     link: function(scope, element, attrs, modelCtrl) {
//       var capitalize = function(inputValue) {
//         if (inputValue == undefined) inputValue = '';
//         var capitalized = inputValue.toUpperCase();
//         if (capitalized !== inputValue) {
//           // see where the cursor is before the update so that we can set it back
//           var selection = element[0].selectionStart;
//           modelCtrl.$setViewValue(capitalized);
//           modelCtrl.$render();
//           // set back the cursor after rendering
//           element[0].selectionStart = selection;
//           element[0].selectionEnd = selection;
//         }
//         return capitalized;
//       }
//       modelCtrl.$parsers.push(capitalize);
//       capitalize(scope[attrs.ngModel]); // capitalize initial value
//     }
//   };
// });

// app.controller('test', function($scope){
//   alert("aman");
//     $scope.data = [
//       {
//         name : 'aman',
//         class : 'cs'    
//       },
//       {
//         name : 'adarsh',
//         class : 'mech'
//       }
//     ];
// });

