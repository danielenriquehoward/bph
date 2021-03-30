export function validateJSON (val) {
    try {
        JSON.parse(val);
        return true;
    } catch (e) {
        return false;
    }
};


export function noop () {}
