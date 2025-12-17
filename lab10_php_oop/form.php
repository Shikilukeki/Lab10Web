<?php
/** 
 * Nama Class: Form 
 * Deskripsi: Class untuk membuat form inputan sederhana
 */

class Form
{
    private $fields = array();
    private $action;
    private $submit = "Submit Form";
    private $jumField = 0;

    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function displayForm()
    {
        echo "<form action='".$this->action."' method='POST'>";
        echo "<table width='100%' border='0'>";

        for ($i = 0; $i < count($this->fields); $i++) {
            echo "<tr>";
            echo "<td align='right'>".$this->fields[$i]['label']."</td>";
            echo "<td><input type='text' name='".$this->fields[$i]['name']."'></td>";
            echo "</tr>";
        }

        echo "<tr><td colspan='2'>";
        echo "<input type='submit' value='".$this->submit."'>";
        echo "</td></tr>";
        echo "</table>";
        echo "</form>";
    }

    public function addField($name, $label)
    {
        $this->fields[$this->jumField]['name']  = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->jumField++;
    }
}
?>
