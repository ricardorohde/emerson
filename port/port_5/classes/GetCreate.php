<?php

    class GetCreate {        
        function getInit($tbDisplayTitle) {
            echo
            '<script src="assets/js/script.js"></script>'.
            '<div class="panel panel-primary panel-create">
                <div class="panel-heading"><strong>' . $tbDisplayTitle . '</strong></div>
                <form id="form-create" class="form-create" method="POST" action="#">';
        }
        
        function getInput($type, $id, $name, $placeHolder) {
            echo    
            '<div class="form-group">
                <label for="nome">' . $placeHolder . '</label>
                <input class="form-control" type="' . $type . '" id="' . $id . '" name="' . $name . '" placeholder="' . $placeHolder . '" required>
            </div>';
        }
        
        function getTxtArea($name, $rows, $placeHolder, $maxLength) {
            echo    
            '<div class="form-group">
                <label for="nome">' . $placeHolder . '</label>
                <textarea class="form-control" name="' . $name . '" rows="' . $rows . '"
                    maxlength="' . $maxLength . '" placeholder="' . $placeHolder . '" required></textarea>
             </div>';
        }
        
        function getEnd($tb) {
            echo
                    '<button type="submit" class="btn btn-primary">Criar</button>
                    <a href="'. $tb .'" class="btn btn-default action-cancel">Cancelar</a>
                </form>
            </div>';
        }
    }

?>