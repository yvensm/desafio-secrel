<?php

class HtmlHelper {

    public static function sumarioDeErros($erros) {
        if (empty($erros))
            return "";

        $content = '';
        foreach ($erros as $erro) {
            $content .= self::tag('li', $erro);
        }
        $content = self::tag('ul', $content);
        return self::tag('div', $content, 'class="alert alert-danger" role="alert"');
    }

    public static function tag($tag, $content = "", $attributes = "") {
        return "<$tag $attributes>$content</$tag>";
    }

    public static function table($data, $tableId = "table", $controlador="", $fieldId = 'id') {
        reset($data); //define o cursor para o primeiro elemento
        $first = current($data);

        $head = "";
        $body = "";

        foreach ($first as $key => $value) {

            $head .= self::tag('th', htmlspecialchars($key));
        }

        $head .= self::tag('th', 'Ações');
        $head = self::tag('tr', $head);


        // data rows
        foreach ($data as $key => $value) {
            $row = "";

            foreach ($value as $key2 => $value2) {
                $value2 = empty($value2) ? '' : $value2;
                $row .= self::tag('td', htmlspecialchars($value2));
            }
            $editUrl = "{$controlador}UpdateForm.php?id=".   $value->$fieldId;
            $editIcon = self::tag('i','',"class='glyphicon glyphicon-edit'");
            $viewUrl = "{$controlador}View.php?id=".   $value->$fieldId;
            $viewIcon = self::tag('i','',"class='glyphicon glyphicon-eye-open'");
            $deleteUrl="{$controlador}Delete.php?id=".   $value->$fieldId;
            $deleteIcon=self::tag('i','',"class='glyphicon glyphicon-trash'");
            


            $buttons = " <a  href='$viewUrl'>$viewIcon</a> <a href='$editUrl'>$editIcon</a> <a href='$deleteUrl'>$deleteIcon</>";
            $row .= self::tag('td', $buttons, "class='text-center'");
            $body .= self::tag('tr', $row);
        }

        $html = "";
        $html .= self::tag('thead', $head);
        $html .= self::tag('tbody', $body);
        return self::tag('table', $html, "id='$tableId' class='table table-striped' ");
    }

}
