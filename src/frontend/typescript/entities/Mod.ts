export { Mod };

class Mod
{
    private _id : number;
    private _name : string;
    private _description : string;
    private _uri : string;
    private _releaseDate : string;
    private _author : string;
    private _thumbnailName : string;
    private _tags : string[];
    private _isUsed : boolean;

    private static _template : HTMLElement;
    private _element : HTMLElement;

    public constructor ( options : JSONMod ) {
        this._id = options.id;
        this._name = options.name;
        this._description = options.description;
        this._uri = options.uri;
        this._releaseDate = options.release_date;
        this._author = options.author;
        this._thumbnailName = options.thumbnail_name;
        this._tags = options.tags.split(',');
        this._isUsed = !!options.is_used;

        if(Mod._template === undefined) {
            Mod._template = Mod.createTemplate();
        }

        this._element = this.createElement();
    }

    public get id() {
        return this._id;
    }
    
    public get name() {
        return this._name;
    }

    public get description() {
        return this._description;
    }

    public get uri() {
        return this._uri;
    }

    public get releaseDate() {
        return this._releaseDate;
    }

    public get author() {
        return this._author;
    }

    public get thumbnailName() {
        return this._thumbnailName;
    }

    public get tags() {
        return this._tags;
    }

    public get isUsed() {
        return this._isUsed;
    }

    public get element() {
        return this._element;
    }

    private createElement() : HTMLElement {
        const MOD_TEMPLATE_CLONE = Mod._template.cloneNode(true);

        if(!(MOD_TEMPLATE_CLONE instanceof HTMLElement)) throw new Error('Cannot create element for Mod : clone of property Mod._template is not an instance of HTMLElement');

        const TITLE_LINK = MOD_TEMPLATE_CLONE.querySelector('.mod-title > a') as HTMLAnchorElement|null;
        TITLE_LINK?.setAttribute('href', this._uri);

        const MOD_NAME = TITLE_LINK?.querySelector('span.mod-name') as HTMLSpanElement|null;
        if(MOD_NAME !== null) MOD_NAME.textContent = this._name;
        MOD_NAME?.after(' - ' + this._author);

        const THUMBNAIL_LINK = MOD_TEMPLATE_CLONE.querySelector('a.mod-thumbnail') as HTMLAnchorElement|null;
        THUMBNAIL_LINK?.setAttribute('href', this._uri);

        const THUMBNAIL_IMG = THUMBNAIL_LINK?.querySelector('img') as HTMLImageElement|null;
        THUMBNAIL_IMG?.setAttribute('src', '/public/assets/images/' + this._thumbnailName);

        const TIME = MOD_TEMPLATE_CLONE.querySelector('p.release-date > time') as HTMLTimeElement|null;
        if(TIME !== null) TIME.textContent = this._releaseDate;
        TIME?.setAttribute('datetime', this._releaseDate);

        const IS_USED = MOD_TEMPLATE_CLONE.querySelector('span.is-used') as HTMLSpanElement|null;
        if(IS_USED !== null) {
            IS_USED.textContent = (this._isUsed) ? 'Utilisé sur le serveur' : 'Désactivé pour le moment';
            if(!this._isUsed) IS_USED.classList.replace('is-used', 'is-not-used');
        }

        const TAGS = MOD_TEMPLATE_CLONE.querySelector('div.tags') as HTMLDivElement|null;
        if(TAGS !== null) TAGS.textContent = this._tags.join(', ');
        
        const DESCRIPTION = MOD_TEMPLATE_CLONE.querySelector('p.mod-desc') as HTMLParagraphElement|null;
        if(DESCRIPTION !== null) DESCRIPTION.textContent = this._description;

        return MOD_TEMPLATE_CLONE;
    }

    private static createTemplate() : HTMLElement {
        const MOD_WRAPPER = document.createElement('div');
        MOD_WRAPPER.classList.add('mod', 'medium');
    
        const TITLE = document.createElement('h3');
        TITLE.classList.add('mod-title');
    
        const TITLE_LINK = document.createElement('a');
        TITLE_LINK.href = Mod.name;

        const MOD_NAME = document.createElement('span');
        MOD_NAME.classList.add('mod-name');

        TITLE_LINK.appendChild(MOD_NAME);
        TITLE.appendChild(TITLE_LINK);
    
        const CONTENT_WRAPPER = document.createElement('div');
        CONTENT_WRAPPER.classList.add('mod-infos');
    
        const THUMBNAIL_LINK = document.createElement('a');
        THUMBNAIL_LINK.classList.add('mod-thumbnail');
        THUMBNAIL_LINK.href = Mod.name;
    
        const THUMBNAIL_IMG = document.createElement('img');
        THUMBNAIL_IMG.src = Mod.name;
    
        THUMBNAIL_LINK.appendChild(THUMBNAIL_IMG);
        CONTENT_WRAPPER.appendChild(THUMBNAIL_LINK);
    
        const INFOS_WRAPPER = document.createElement('div');
    
        const RELEASE_DATE = document.createElement('p');
        RELEASE_DATE.classList.add('release-date');
        RELEASE_DATE.textContent = 'Mis en ligne le : ';

        const TIME = document.createElement('time');
        RELEASE_DATE.appendChild(TIME);
    
        const IS_USED = document.createElement('span');
        IS_USED.classList.add('is-used');
    
        const TAGS_TITLE = document.createElement('p');
        TAGS_TITLE.textContent = 'Tags :';
    
        const TAGS_WRAPPER = document.createElement('div');
        TAGS_WRAPPER.classList.add('tags');
    
        const TAG = document.createElement('span');
        TAG.classList.add('tag');
    
        const DESCRIPTION = document.createElement('p');
        DESCRIPTION.classList.add('mod-desc');
        DESCRIPTION.textContent = Mod.name;
    
        INFOS_WRAPPER.appendChild(RELEASE_DATE);
        INFOS_WRAPPER.appendChild(IS_USED);
        INFOS_WRAPPER.appendChild(TAGS_TITLE);
        INFOS_WRAPPER.appendChild(TAGS_WRAPPER);
        INFOS_WRAPPER.appendChild(DESCRIPTION);
    
        CONTENT_WRAPPER.appendChild(INFOS_WRAPPER);
    
        MOD_WRAPPER.appendChild(TITLE);
        MOD_WRAPPER.appendChild(CONTENT_WRAPPER);
    
        return MOD_WRAPPER;
    }
}