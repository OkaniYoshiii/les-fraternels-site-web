import { Thumbnail } from "./Thumbnail.js";

export { Mod };

class Mod
{
    constructor (
        private id : number,
        private name : string,
        private description : string,
        private uri : string,
        private releaseDate : string,
        private author : string,
        private thumbnail_name : string|null = null,
        private thumbnail : Thumbnail,
        private tags : string[],
        private isUsed : boolean
    ) {}
}