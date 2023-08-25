<?php

//funções Recurcivas

$hierarquia = array(
   array(
      'nome_cargo'=>'CEO',
      'subordinados'=>array(
         // inicio: diretor comercial
         array(
            'nome_cargo'=>'Diretor comercial',
            'subordinados'=>array(
               // inicio: Gerente vendas
               array(
                  'nome_cargo'=>'Gerente de vendas'
               )
               // termino: Gerente vendas
            )
         ),
         // Termino: diretor comercial
         // inicio: Diretor Financeiro
         array(
            'nome_cargo'=>'Diretor Financeiro',
            'subordinados'=>array(
               // inicio: gerente contas a pagar
               array(
                  'nome_cargo'=>'Gerente contas a pagar',
                  'subordinados'=>array(
                     // inicio: supervisor de pagamentos
                     array(
                        'nome_cargo'=>'supervisor de pagamentos'
                     )
                     // termino: supervisor de pagamentos
                  )
                  
                     ),
               // termino: gerente contas a pagar
               // inicio: Gerente de copras
               array(
                  'nome_cargo'=>'Gerente de copras',
                  'subordinados'=>array(
                      // inicio: supervisor de suplementos
                      array(
                        'nome_cargo'=>'supervisor de suplementos',
                        'subordinados'=>array(
                           // inicio: Fisca de suplementos
                           array(
                              'nome_cargo'=>'Fisca de suplementos'
                           )
                            // termino: Fisca de suplementos

                        )
                        
                      )
                       // termino: supervisor de suplementos

                  )
               )
               // termino: Gerente de copras
            )
         )
         // termino: Diretor Financeiro
      )
   )
);

function exibe($cargos){
   $html = "<ul>";


 

   foreach ($cargos as $cargo) {
      $html .= "<li>";
      $html .= $cargo['nome_cargo'];

      if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

            $html .= exibe($cargo['subordinados']);
      }

      $html .= "</li>";
   }
  $html .= "</ul>";
   return $html;
}

echo exibe($hierarquia);
?>
