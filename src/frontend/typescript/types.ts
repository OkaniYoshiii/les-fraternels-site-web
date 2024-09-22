type ModsFilterData = {
    'activated-mods' : string,
    'tags' : string
};

type JSONMod = {
    id : number,
    name : string,
    description : string,
    uri : string,
    release_date : string,
    author : string,
    thumbnail_name : string,
    tags : string,
    is_used : 0|1
};