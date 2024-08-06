$(document).ready(function(){

    alert("Seu site carregou!");
    

    $("#cmbCidade").on("change", function(){
        alert("Tem certeza?");
    })

    $('#btCadastro').on( "click", function(){

        if($("#txtNome").val() == ""){
            alert("Prencha nome!")
            return 0;
        }

        if($("#txtCPF").val() == ""){
            alert("Prencha CPF!")
            return 0;
        }

        if($("#txttel").val() == ""){
            alert("Prencha Telefone!")
            return 0;
        }

        if($("#txtEmail").val() == ""){
            alert("Prencha Email!")
            return 0;
        }

        if($("#cmbCidade").val() == ""){
            alert("Selecione a cidade!")
            return 0;
        }


        var inputNome = $("#txtNome").val();
        var inputCPF = $("#txtCPF").val();
        var inputTel = $("#txttel").val();
        var inputEmail = $("#txtEmail").val();
        var selectCidade = $("#cmbCidade").val();
        
       
       
        alert("Cadastrado com as seguintes informações: \n Nome: " + inputNome + "\n CPF: " + inputCPF + " \n Cidade: "+ selectCidade + "\n Telefone: " + inputTel + "\n Email: " + inputEmail)
    })

});
