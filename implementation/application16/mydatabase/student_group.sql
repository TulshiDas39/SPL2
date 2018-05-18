/*CREATE TABLE `student_group` (
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `student_group`
  ADD PRIMARY KEY (`group_id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `group_id` (`group_id`);

  */

  CREATE TABLE student_group (
    group_id int NOT NULL,
    user_id NOT NULL,
    PRIMARY KEY (group_id,user_id),
    FOREIGN KEY (group_id) REFERENCES group(PersonID),
    FOREIGN KEY (user_id) REFERENCES user(user_id);
);