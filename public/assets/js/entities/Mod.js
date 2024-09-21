export { Mod };
class Mod {
    constructor(id, name, description, uri, releaseDate, author, thumbnail_name = null, thumbnail, tags, isUsed) {
        this.id = id;
        this.name = name;
        this.description = description;
        this.uri = uri;
        this.releaseDate = releaseDate;
        this.author = author;
        this.thumbnail_name = thumbnail_name;
        this.thumbnail = thumbnail;
        this.tags = tags;
        this.isUsed = isUsed;
    }
}
