module.exports = {
  "root": true,
  "extends": "airbnb",
  "globals": {
    "wp": true
  },
  "env": {
    "node": true,
    "es6": true,
    "amd": true,
    "browser": true,
    "jquery": true
  },
  "parserOptions": {
    "ecmaFeatures": {
      "globalReturn": true,
      "generators": false,
      "objectLiteralDuplicateProperties": false,
      "experimentalObjectRestSpread": true
    },
    "ecmaVersion": 2017,
    "sourceType": "module"
  },
  "plugins": [
    "jquery",
    "import",
    "prettier",
    "react"
  ],
  "settings": {
    "import/core-modules": [],
    "import/ignore": [
      "node_modules",
      "\\.(coffee|scss|css|less|hbs|svg|json)$"
    ]
  },
  "rules": {
    "strict": 1,
    "eol-last": 1,
    "no-else-return": 1,
    "max-len": [1, 80, 2],
    "prefer-arrow-callback": 1,
    "prefer-template": 2,
    "prettier/prettier": "error",
    "indent": [1, 2, {
      "SwitchCase": 1,
      "VariableDeclarator": 1
    }],
    "no-loop-func": 0,
    "no-nested-ternary": 1
  }
}
