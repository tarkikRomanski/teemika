import Resource from './Resource';

export class PlanResource extends Resource {
    list() {
        return super.get('plan');
    }

    show(id) {
        return super.get('plan/' + id);
    }

    create(data, config = {}) {
        return super.post('plan', data, config);
    }

    update(id, data, config = {}) {
        return super.create('plan/' + id, data, config);
    }

    delete(id) {
        return super.delete('plan/' + id);

    }
}