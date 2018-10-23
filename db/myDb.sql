DROP TABLE users CASCADE;
DROP TABLE blog_post CASCADE;
DROP TABLE comment CASCADE;

CREATE TABLE users
(
    id              SERIAL              PRIMARY KEY,
    username        VARCHAR(50)         UNIQUE NOT NULL,
    password        VARCHAR(255)        NOT NULL
);

CREATE TABLE blog_post 
(
    id              SERIAL              PRIMARY KEY,
    userId          INT                 NOT NULL REFERENCES users(id),
    title           VARCHAR(50)         NOT NULL,
    body            TEXT                NOT NULL
);

CREATE TABLE comment 
(
    id              SERIAL              PRIMARY KEY,
    blogId          INT                 NOT NULL REFERENCES blog_post(id),
    comment         VARCHAR(250)        NOT NULL
);

-- QUERIES


-- SELECT bp.title, c.comment, u.username FROM blog_post bp
--     JOIN comment c
--         ON c.blogId = bp.id
--     JOIN users u
--         ON u.id = bp.userId;

-- SELECT c.comment FROM comment c
--     JOIN blog_post bp
--         ON c.blogId = bp.id
--     WHERE bp.id = 2;


-- SELECT title FROM blog_post;

-- SELECT title from blog_post
-- WHERE title LIKE '%Lorem Ipsum 1%'
-- ORDER BY title DESC;

-- SELECT bp.id, bp.title, u.username FROM blog_post bp
--     JOIN users u
--         ON bp.userId = u.id
--     WHERE bp.id = 1;

INSERT INTO users (username, password) VALUES
(
    'sammcgrath67',
    'hunter12'
);

INSERT INTO users (username, password) VALUES
(
    'blogger',
    'blog1'
);

INSERT INTO blog_post (userId, title, body) VALUES
(1, 'Lorem Ipsum 1 First', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et quam consectetur dolor egestas rhoncus. Suspendisse aliquam blandit condimentum. Quisque elementum consequat mauris ac condimentum. Cras egestas convallis mattis. Nunc sit amet erat neque. Integer lobortis, ligula ac suscipit feugiat, mi arcu placerat nunc, non lacinia felis nulla id nulla. Donec gravida, quam sit amet convallis imperdiet, tortor quam euismod nibh, vitae sagittis orci lorem in nunc. Nam non augue vulputate, feugiat sem a, gravida tortor. Fusce ornare eros vitae scelerisque eleifend. Sed a erat ac odio varius aliquet. Suspendisse nisl metus, venenatis quis mauris nec, pretium tincidunt velit. Donec et tortor quis lacus scelerisque eleifend at sodales felis. Vivamus non risus tortor. Sed lacinia justo vulputate, viverra massa a, iaculis lacus. Duis at neque vitae tellus luctus porttitor. Praesent condimentum sed justo vulputate dignissim. Quisque justo elit, scelerisque non mollis vel, fermentum tincidunt risus. Sed in venenatis arcu. Nulla condimentum aliquet nibh, eget eleifend metus finibus a. Praesent et placerat felis. Sed sit amet urna sagittis, consectetur massa in, luctus felis. Donec tincidunt tellus non lacus dapibus, lacinia rutrum diam dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra convallis risus, quis rutrum magna vehicula et. Nam scelerisque fermentum lectus in posuere. Phasellus sollicitudin magna eget metus aliquam hendrerit. In porta pulvinar erat at ultricies. Proin nec volutpat lorem. Aenean nulla odio, accumsan at tellus eget, bibendum dictum dui. Pellentesque ligula est, congue placerat dignissim vitae, suscipit nec dui. Nullam nec est sed justo convallis dignissim. Nam vel condimentum dui. Praesent consequat convallis erat, ac ullamcorper nisl. Mauris suscipit, quam vitae auctor mollis, nisl felis bibendum massa, sed iaculis magna purus id nisi. Nunc urna arcu, congue non dolor sit amet, placerat placerat purus. Mauris sapien tellus, ullamcorper et dolor et, pharetra vehicula justo. Integer auctor suscipit eleifend. Fusce vestibulum purus ut lacus hendrerit ullamcorper. In hac habitasse platea dictumst. Donec rutrum lectus sit amet malesuada sagittis. Vestibulum molestie lectus metus. Etiam ullamcorper quam ex, at vulputate turpis semper vitae. Quisque commodo sagittis nunc dictum commodo. Aenean semper nibh eu nulla auctor, vitae porttitor turpis convallis.');

INSERT INTO blog_post (userId, title, body) VALUES
(2,  'Lorem Ipsum 2 First', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et quam consectetur dolor egestas rhoncus. Suspendisse aliquam blandit condimentum. Quisque elementum consequat mauris ac condimentum. Cras egestas convallis mattis. Nunc sit amet erat neque. Integer lobortis, ligula ac suscipit feugiat, mi arcu placerat nunc, non lacinia felis nulla id nulla. Donec gravida, quam sit amet convallis imperdiet, tortor quam euismod nibh, vitae sagittis orci lorem in nunc. Nam non augue vulputate, feugiat sem a, gravida tortor. Fusce ornare eros vitae scelerisque eleifend. Sed a erat ac odio varius aliquet. Suspendisse nisl metus, venenatis quis mauris nec, pretium tincidunt velit. Donec et tortor quis lacus scelerisque eleifend at sodales felis. Vivamus non risus tortor. Sed lacinia justo vulputate, viverra massa a, iaculis lacus. Duis at neque vitae tellus luctus porttitor. Praesent condimentum sed justo vulputate dignissim. Quisque justo elit, scelerisque non mollis vel, fermentum tincidunt risus. Sed in venenatis arcu. Nulla condimentum aliquet nibh, eget eleifend metus finibus a. Praesent et placerat felis. Sed sit amet urna sagittis, consectetur massa in, luctus felis. Donec tincidunt tellus non lacus dapibus, lacinia rutrum diam dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra convallis risus, quis rutrum magna vehicula et. Nam scelerisque fermentum lectus in posuere. Phasellus sollicitudin magna eget metus aliquam hendrerit. In porta pulvinar erat at ultricies. Proin nec volutpat lorem. Aenean nulla odio, accumsan at tellus eget, bibendum dictum dui. Pellentesque ligula est, congue placerat dignissim vitae, suscipit nec dui.');

INSERT INTO blog_post (userId, title, body) VALUES
(1, 'Lorem Ipsum 1 Second', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

INSERT INTO comment (blogId, comment) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

INSERT INTO comment (blogId, comment) VALUES
(1, 'Lorem ipsum dolor sit amet.');

INSERT INTO comment (blogId, comment) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nulla felis, dignissim nec consequat sed.');

INSERT INTO comment (blogId, comment) VALUES
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

INSERT INTO comment (blogId, comment) VALUES
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nulla felis.');
