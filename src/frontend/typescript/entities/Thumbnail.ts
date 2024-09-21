export { Thumbnail };

class Thumbnail
{
    constructor(
        private source : string|null,
        private defaultSource : string,
        private dimensions : number[],
        private width : number,
        private height : number
    ){}
}