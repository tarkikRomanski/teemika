import Resource from './Resource';

export class HelpResource extends Resource {
    list() {
        return super.get('help');
    }

    show(id) {
        return super.get('help/' + id);
    }

    create(data, config = {}) {
        return super.post('help', data, config);
    }

    update(id, data, config = {}) {
        return super.create('help/' + id, data, config);
    }

    delete(id) {
        return super.delete('help/' + id);

    }
}