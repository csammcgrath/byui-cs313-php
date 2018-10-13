DROP TABLE user CASCADE;
DROP TABLE blog_post CASCADE;
DROP TABLE comment CASCADE;

CREATE TABLE users
(
    id              SERIAL              PRIMARY KEY,
    username        VARCHAR(50)         UNIQUE NOT NULL,
    password        VARCHAR(40)         NOT NULL
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