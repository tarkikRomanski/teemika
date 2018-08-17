import Resource from './Resource';

export class HowResource extends Resource {
    list() {
        return super.get('how');
    }

    show(id) {
        return super.get('how/' + id);
    }

    create(data, config = {}) {
        return super.post('how', data, config);
    }

    update(id, data, config = {}) {
        return super.create('how/' + id, data, config);
    }

    delete(id) {
        return super.delete('how/' + id);

    }
}