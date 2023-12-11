      var div1 = document.getElementById('edituserprofilediv');
      var div2 = document.getElementById('showprofilediv');

      var btn1 = document.getElementById('editprofilebtn');
      var btn2 = document.getElementById('ignoreedint');

      btn1.onclick = function() { 
        div1.setAttribute('class', 'visible');
        div2.setAttribute('class', 'hidden');
      };

      btn2.onclick = function() { 
        div2.setAttribute('class', 'visible');
        div1.setAttribute('class', 'hidden');
      };