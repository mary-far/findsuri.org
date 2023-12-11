
      var logindiv = document.getElementById('logindiv');
      var signupdiv = document.getElementById('Signupdiv');

      var havenoaccountvar = document.getElementById('havenoaccount');
      var haveaccountvar = document.getElementById('haveaccount');

      havenoaccountvar.onclick = function() {
          logindiv.setAttribute('class', 'hidden');
          signupdiv.setAttribute('class', 'visible');
      };

      haveaccountvar.onclick = function() {
          signupdiv.setAttribute('class', 'hidden');
          logindiv.setAttribute('class', 'visible');
      };



      
      