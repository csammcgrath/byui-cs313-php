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

INSERT INTO blog_post (userId, title, body, visits) VALUES
(1, 'Lorem Ipsum 1 First', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et quam consectetur dolor egestas rhoncus. Suspendisse aliquam blandit condimentum. Quisque elementum consequat mauris ac condimentum. Cras egestas convallis mattis. Nunc sit amet erat neque. Integer lobortis, ligula ac suscipit feugiat, mi arcu placerat nunc, non lacinia felis nulla id nulla. Donec gravida, quam sit amet convallis imperdiet, tortor quam euismod nibh, vitae sagittis orci lorem in nunc. Nam non augue vulputate, feugiat sem a, gravida tortor. Fusce ornare eros vitae scelerisque eleifend. Sed a erat ac odio varius aliquet. Suspendisse nisl metus, venenatis quis mauris nec, pretium tincidunt velit. Donec et tortor quis lacus scelerisque eleifend at sodales felis. Vivamus non risus tortor. Sed lacinia justo vulputate, viverra massa a, iaculis lacus. Duis at neque vitae tellus luctus porttitor. Praesent condimentum sed justo vulputate dignissim. Quisque justo elit, scelerisque non mollis vel, fermentum tincidunt risus. Sed in venenatis arcu. Nulla condimentum aliquet nibh, eget eleifend metus finibus a. Praesent et placerat felis. Sed sit amet urna sagittis, consectetur massa in, luctus felis. Donec tincidunt tellus non lacus dapibus, lacinia rutrum diam dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra convallis risus, quis rutrum magna vehicula et. Nam scelerisque fermentum lectus in posuere. Phasellus sollicitudin magna eget metus aliquam hendrerit. In porta pulvinar erat at ultricies. Proin nec volutpat lorem. Aenean nulla odio, accumsan at tellus eget, bibendum dictum dui. Pellentesque ligula est, congue placerat dignissim vitae, suscipit nec dui. Nullam nec est sed justo convallis dignissim. Nam vel condimentum dui. Praesent consequat convallis erat, ac ullamcorper nisl. Mauris suscipit, quam vitae auctor mollis, nisl felis bibendum massa, sed iaculis magna purus id nisi. Nunc urna arcu, congue non dolor sit amet, placerat placerat purus. Mauris sapien tellus, ullamcorper et dolor et, pharetra vehicula justo. Integer auctor suscipit eleifend. Fusce vestibulum purus ut lacus hendrerit ullamcorper. In hac habitasse platea dictumst. Donec rutrum lectus sit amet malesuada sagittis. Vestibulum molestie lectus metus. Etiam ullamcorper quam ex, at vulputate turpis semper vitae. Quisque commodo sagittis nunc dictum commodo. Aenean semper nibh eu nulla auctor, vitae porttitor turpis convallis.', 0);

INSERT INTO blog_post (userId, title, body, visits) VALUES
(2,  'Lorem Ipsum 2 First', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et quam consectetur dolor egestas rhoncus. Suspendisse aliquam blandit condimentum. Quisque elementum consequat mauris ac condimentum. Cras egestas convallis mattis. Nunc sit amet erat neque. Integer lobortis, ligula ac suscipit feugiat, mi arcu placerat nunc, non lacinia felis nulla id nulla. Donec gravida, quam sit amet convallis imperdiet, tortor quam euismod nibh, vitae sagittis orci lorem in nunc. Nam non augue vulputate, feugiat sem a, gravida tortor. Fusce ornare eros vitae scelerisque eleifend. Sed a erat ac odio varius aliquet. Suspendisse nisl metus, venenatis quis mauris nec, pretium tincidunt velit. Donec et tortor quis lacus scelerisque eleifend at sodales felis. Vivamus non risus tortor. Sed lacinia justo vulputate, viverra massa a, iaculis lacus. Duis at neque vitae tellus luctus porttitor. Praesent condimentum sed justo vulputate dignissim. Quisque justo elit, scelerisque non mollis vel, fermentum tincidunt risus. Sed in venenatis arcu. Nulla condimentum aliquet nibh, eget eleifend metus finibus a. Praesent et placerat felis. Sed sit amet urna sagittis, consectetur massa in, luctus felis. Donec tincidunt tellus non lacus dapibus, lacinia rutrum diam dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra convallis risus, quis rutrum magna vehicula et. Nam scelerisque fermentum lectus in posuere. Phasellus sollicitudin magna eget metus aliquam hendrerit. In porta pulvinar erat at ultricies. Proin nec volutpat lorem. Aenean nulla odio, accumsan at tellus eget, bibendum dictum dui. Pellentesque ligula est, congue placerat dignissim vitae, suscipit nec dui.', 0);

INSERT INTO blog_post (userId, title, body, visits) VALUES
(1, 'Lorem Ipsum 1 Second', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 0);

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

UPDATE blog_post 
SET visits = visits + 1
WHERE id = 2;