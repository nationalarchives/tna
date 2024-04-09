# Additional research guide documentation

## Glossary
The glossary used in the research is held in a php array in the file [inc/research-guides/research-guide-glossary-data.php. Each entry in the array is in the form

    'shortname'=>'definition',

 - The `shortname` is used as in the shortcode so should be kept short and have no spaces or _odd_ characters - it doesn't get displayed anywhere.
 - The `definition` is a sentence explaining the term - these are shown as tooltips so should be kept fairly short. Any apostrophes will need to be escaped with a `\` e.g. `King\'s`

To add a glossary term the term is added in the editor with surronding tags as follows

    [glossary term="shortname"]Term to be defined[/glossary]


