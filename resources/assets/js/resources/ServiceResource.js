import Resource from './Resource';

export class ServiceResource extends Resource {
    list() {
        return super.get('service');
    }

    show(id) {
        return super.get('service/' + id);
    }

    create(data, config = {}) {
        return super.post('service', data, config);
    }

    update(id, data, config = {}) {
        return super.create('service/' + id, data, config);
    }

    delete(id) {
        return super.delete('service/' + id);

    }
}