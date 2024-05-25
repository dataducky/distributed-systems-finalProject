USE userauth;

INSERT INTO users VALUES ('ducky', sha2('HankWilliams42', 224), 1);
INSERT INTO users VALUES ('user', sha2('pass', 224), 0);
INSERT INTO users VALUES ('jeff', sha2('lovesCats', 224), 0);