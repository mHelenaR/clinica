<?php

/*
create table consulta(
	cons_id int auto_increment primary key,
    cons_data date,
    cons_descricao varchar(50),
    cons_id_paciente int,
    cons_id_medico int,
    FOREIGN KEY (cons_id_paciente) REFERENCES paciente(paci_id),
    FOREIGN KEY (cons_id_medico) REFERENCES medico(medi_id)
); */
class ConsultaModel{
    public $cons_data, $cons_descricao, $cons_id_paciente, $cons_id_medico; 
}

?>