<?php
# Interface Armadura 
  interface Armadura {
    public function absorberDanio( $danio );
  }
  /* NOTA: Las interfaces no poseen ningún tipo de lógica, son como contratos donde 
           se le indica que cosas debe hacer de forma estricta, en este caso cualquier
           clase que implemente esta interface debe definir los atributos y métodos que 
           esta posea. Las Interfaces no pueden ser instanciadas. Las clases pueden 
           implementar una o mas interfaces */
