# Additional research guide documentation

## Guided search forms
Guided search forms are customised search forms that can be embedded into research guides, they are used quite widely.

Each form exists in an individual file with a `.php` extension - the filename before the extension is used in the shortcode to embed the form so should be kept short - it is never displayed to the user.

The file contains an html form which sends the form to a [Discovery](https://discovery.nationalarchives.gov.uk/results/r) search. There are a number of different fields that can be used and we'd normally liaise with CEE to get the required fields - it is worth asking them what fields they would use in an advanced search form to help identify what terms should be used in the guided search form.

The most common terms are:

 - `\_q` - a basic query
 - `\_cr` - catalog reference _this can be used a number of times - you might also see in some forms \_cr1 \_cr2 \_cr3 these are legacy strings to add mutilple references but are no longer needed_



A full list can be found in [the Discovery repo here](https://github.com/nationalarchives/discovery/blob/master/RDWeb/ViewModel/Search/SearchParametersViewModel.cs)
