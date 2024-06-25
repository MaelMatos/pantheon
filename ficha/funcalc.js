        
    function resultdados(ra,rn,va,m,nl){
        $.ajax({
            type: 'get',
            url: 'calculadora.php',
            data:{
                ra:ra,
                rn:rn,
                va:va,
                m:m,
                nl:nl
            },
        sucess: function(response){
            document.getElementsByClassName = "resultado"
        }

        });
    }
    
