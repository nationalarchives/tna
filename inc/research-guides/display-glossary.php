<?php
require_once('research-guide-glossary-data.php');

echo "<html><head><title>Glossary</title></head><body><h1>Research guides glossary</h1><table>";
foreach ($glossaryDefinitions as $term => $definition) {
	echo"<tr style=\"font-family: Courier New, courier, mono;\"><td style=\"border: 1px solid;\">[glossary term=\"$term\"]" . str_replace('-', ' ' , $term) . "[/glossary]</td><td style=\"border: 1px solid\";>$definition</td></tr>";
}
echo "</table></body></html>";
?>
