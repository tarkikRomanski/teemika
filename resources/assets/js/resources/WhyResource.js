import Resource from './Resource';

export class WhyResource extends Resource {
    list() {
        return super.get('why');
    }

    show(id) {
        return super.get('why/' + id);
    }

    create(data, config = {}) {
        return super.post('why', data, config);
    }

    update(id, data, config = {}) {
        return super.create('why/' + id, data, config);
    }

    delete(id) {
        return super.delete('why/' + id);

    }
}