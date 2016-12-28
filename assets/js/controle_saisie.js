<script type="text/javascript">

        function surligne(champ, erreur)
        {
           if(erreur)
            champ.style.backgroundColor = "#FF445B";
        else
            champ.style.backgroundColor = "#8FD290";	
        }       

        // Nom
        function verifLastname(champ)
        {
            if(champ.value.length < 2 || champ.value.length > 25)
            {
                surligne(champ, true);
                return false;
            }
            else
            {
                surligne(champ, false);
                return true;
            }
        }

        // Prenom
        function verifFirstname(champ)
        {
            if(champ.value.length < 2 || champ.value.length > 25)
            {
                surligne(champ, true);
                return false;
            }
            else
            {
                surligne(champ, false);
                return true;
            }
        }        

        // Age
        function verifAge(champ)
        {
            var age = parseInt(champ.value);
            if(isNaN(age) || age < 18 || age > 90)
            {
                surligne(champ, true);
                return false;
            }
            else
            {
                surligne(champ, false);
                return true;
            }
        }

        // Mail
        function verifMail(champ)
        {
           var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
            if(!regex.test(champ.value))
            {
                surligne(champ, true);
                return false;
            }
            else
            {
                surligne(champ, false);
                return true;
            }
        } 

        function controlvide() 
        {
            var isChecked=false;
            for (i=0; i<document.getElementsByTagName("input").length; i++)
            if (document.getElementsByTagName("input")[i].name=="gender")
            if (document.getElementsByTagName("input")[i].checked)
                isChecked=true;
                if (!isChecked)
                {
                    alert('Vous devez choisir entre Professionnel et Particulier !');
                    return false;
                }
        }

        // Verif Général
        function verifForm(f)
        {
			var lastnameOk = verifLastname(f.lastname);
			var firstnameOk = verifFirstname(f.firstname);
           	var ageOk = verifAge(f.age);
           	var mailOk = verifMail(f.user_login);
           
           if(lastnameOk && firstnameOk && ageOk && mailOk)
              return true;
           else {
              return false; 
           }
        }


    function verif()
    {
        if( document.getElementById('user_pass').value != document.getElementById('user_pass2').value)
        {
            document.getElementById('user_pass').style.backgroundColor = '#FF445B';
            document.getElementById('user_pass2').style.backgroundColor = '#FF445B';
        }else{
            document.getElementById('user_pass').style.backgroundColor = '#8FD290';
            document.getElementById('user_pass2').style.backgroundColor = '#8FD290';
        }
        var age = parseInt(champ.value);
    }

    function sendForm()
    {
    if( document.getElementById('user_pass').value != document.getElementById('user_pass2').value)
        {
            document.getElementById('user_pass').style.backgroundColor = '#FF445B';
            document.getElementById('user_pass2').style.backgroundColor = '#FF445B';
            console.log("test");
        }else{
            console.log("test2");
            document.getElementById('user_pass').style.backgroundColor = '#8FD290';
            document.getElementById('user_pass2').style.backgroundColor = '#8FD290';
            document.getElementById('add_user').submit();
        }
    }
</script>