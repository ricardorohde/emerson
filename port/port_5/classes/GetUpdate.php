<?php

    echo '<script src="assets/js/script.js"></script>';

    class GetUpdate {        
        function getInit($tbDisplayTitle) {
            echo    
            '<div class="panel panel-primary panel-update">
                <div class="panel-heading"><strong>' . $tbDisplayTitle . '</strong></div>
                <form id="form-update" class="form-update" method="POST" action="#">';
        }
        
        function getInput($type, $id, $name, $placeHolder, $value) {
            echo    
            '<div class="form-group">
                <label for="nome">' . $placeHolder . '</label>
                <input class="form-control" type="' . $type . '" id="' . $id . '" name="' . $name . '" value="' . $value .'" placeholder="' . $placeHolder . '" required>
            </div>';
        }
        
        function getTxtArea($name, $rows, $placeHolder, $maxLength, $inner) {
            echo    
            '<div class="form-group">
                <label for="nome">' . $placeHolder . '</label>
                <textarea class="form-control" name="' . $name . '" rows="' . $rows . '"
                    maxlength="' . $maxLength . '" placeholder="' . $placeHolder . '" required>' . $inner . '</textarea>
             </div>';
        }
        
        function getEnd($tb) {
            echo
                    '<button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    <a href="'. $tb .'" class="btn btn-default action-cancel">Cancelar</a>
                </form>
            </div>';
        }
    }

?>