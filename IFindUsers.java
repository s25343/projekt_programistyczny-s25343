package org.example.model;

import java.time.LocalDateTime;
import java.util.List;
import java.util.Map;

public interface IFindUsers {
    List<User> getUsersByUsername(List<User> users, String username);
    void deactivateUsersSeenBefore(List<User> users, LocalDateTime lastSeen);
    Map<Role, List<User>> groupByRole (List<User> users);
    double getAverageRating (List<User> users);
}
