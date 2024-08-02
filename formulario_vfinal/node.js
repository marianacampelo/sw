$(document).ready(function(){

    alert("Seu site carregou!");
    
    $("#btNome").on("click", function(){
        alert("Tem certeza?");
    })

    $("#btCPF").on("click", function(){
        alert("Tem certeza?");
    })

    $("#btTelefone").on("click", function(){
        alert("Tem certeza?");
    })

    $("#btemail").on("click", function(){
        alert("Tem certeza?");
    })

    $("#cmbCidade").on("change", function(){
        alert("Tem certeza?");
    })

    $('#btCadastro').click (function(){
        var inputNome = $("#txtNome").val();
        var inputCPF = $("#txtCPF").val();
        var inputTel = $("#txttel").val();
        var inputEmail = $("#txtEmail").val();
        var selectCidade = $("#cmbCidade").val();
        
       
       
        alert("Cadastrado com as seguintes informações: \n Nome: " + inputNome + "\n CPF: " + inputCPF + " \n Cidade: "+ selectCidade + "\n Telefone: " + inputTel + "\n Email: " + inputEmail)
    })

});
