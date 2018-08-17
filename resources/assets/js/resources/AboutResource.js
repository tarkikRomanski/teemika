import Resource from './Resource';

export class AboutResource extends Resource {
    list() {
        return super.get('about');
    }

    show(id) {
        return super.get('about/' + id);
    }

    create(data, config = {}) {
        return super.post('about', data, config);
    }

    update(id, data, config = {}) {
        return super.create('about/' + id, data, config);
    }

    delete(id) {
        return super.delete('about/' + id);

    }
}