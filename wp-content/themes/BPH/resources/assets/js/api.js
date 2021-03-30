const BASE_URL = '/wp-json';


function getJSON (path) {
    return fetch(BASE_URL + path)
        .then(res => {
            if (res.ok) {
                return res.json();
            }

            return res.json().then(err => Promise.reject(err));
        });
}


export const exampleReqest = () => getJSON('/v2/wp/posts');
