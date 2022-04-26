<?php
    function getDados(){

        //comparação para verificar se existe algum cep digitado
        if(isset ($_POST['cep'])){
            
            $cep = $_POST['cep'];
            
            //retirando caracteres que não compoem cep
            $cep = retirandoCaracter($cep);

            //verificando se é um cep com no padrão de caracter válidos
            if(eCEp ($cep)){            
                                
               $dados = getViaCep($cep); 
               //verificar se o cep existe
               if(property_exists($dados,'erro')){
                   $dados = dadosBranco();
                   $dados->cep = 'este cep não existe';
               }           
                 
            }else{
                $dados = dadosBranco();
                //caso o cep digitado for inválido
                $dados->cep = 'cep inválido';
                
            }        
        }else{
            $dados = dadosBranco();
        }
        return $dados;
    }// fim da função dados

    function dadosBranco(){
        return  (object) [
            'cep' => '',
            'logradouro' => '',
            'bairro' => '',
            'localidade' => '',
            'uf' => '',
            'ibge' => ''
        ];
    }

    function getViaCep(String $cep){

         //consultando api via cep
         $url = "https://viacep.com.br/ws/{$cep}/json/";

         //tranformando dados em json
         return json_decode(file_get_contents($url));

    }
    
    function eCep(String $cep){
        return preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep);
    }

    function retirandoCaracter (String $cep){
        return preg_replace('/[^0-9]/','',$cep);
    }
    
?>