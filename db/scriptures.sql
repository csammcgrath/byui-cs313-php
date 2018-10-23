DROP TABLE scriptures CASCADE;
DROP TABLE topics CASCADE;
DROP TABLE scriptures_topics CASCADE;

CREATE TABLE scriptures
(
    id SERIAL PRIMARY KEY
    , book VARCHAR(20) NOT NULL
    , chapter SMALLINT NOT NULL
    , verse SMALLINT NOT NULL
    , content TEXT NOT NULL
);

CREATE TABLE topics
(
    id SERIAL PRIMARY KEY,
    name VARCHAR(50)
);

CREATE TABLE scriptures_topics
(
    id SERIAL PRIMARY KEY,
    scripturesId SMALLINT REFERENCES scriptures(id),
    topicsId SMALLINT REFERENCES topics(id)
);

-- 1
INSERT INTO scriptures (book, chapter, verse, content) VALUES
('John', 1, 5, 'And the light shineth in darkness,; and the darkness comprehended it not.');

-- 2
INSERT INTO scriptures (book, chapter, verse, content) VALUES
('D & C', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God being quickened in him and by him.');

-- 3
INSERT INTO scriptures (book, chapter, verse, content) VALUES
('D & C', 93, 28, 'He that keepth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.');

-- 4
INSERT INTO scriptures (book, chapter, verse, content) VALUES
('D & C', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God being quickened in him and by him.');

-- 5
INSERT INTO scriptures (book, chapter, verse, content) VALUES
('Mosiah', 16, 9, 'He is the light and the life of the world; year, a light that is endless, that can never be darkened; year, and also a life which is endless, that there can be no more death.');

INSERT INTO topics (name) VALUES
('Faith'),
('Repentance'),
('Charity'),
('Sacrifice');

INSERT INTO scriptures_topics (scripturesId, topicsId) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1)