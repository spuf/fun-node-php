const fs = require('fs');
const path = require('path');
const yaml = require('js-yaml');

let config;
try {
    config = yaml.safeLoad(fs.readFileSync(path.join(__dirname, 'config.yml'), 'utf8'));
} catch (e) {
    console.error(e.message);
    process.exit(1);
}

console.log(config);
