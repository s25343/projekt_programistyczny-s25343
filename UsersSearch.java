package org.example.model;

import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.util.stream.Collectors;
import java.util.stream.Stream;

public class UsersSearch implements IFindUsers{
    @Override
    public List<User> getUsersByUsername(List<User> users, String username) {
        return users.stream().filter(s -> s.getUsername().equalsIgnoreCase(username)).collect(Collectors.toList());
    }

    @Override
    public void deactivateUsersSeenBefore(List<User> users, LocalDateTime lastseen) {
       users.stream().filter(s -> s.getLastSeen().isBefore(lastseen)).toArray();

    }

    @Override
    public Map<Role, List<User>> groupByRole(List<User> users) {
        return users.stream().collect(Collectors.toMap(user -> user.getRole(), user -> {
            List<User> userss = new ArrayList<>();
            userss.add(user);
            return userss;
        }));
//        Stream.of(users).collect(Collectors.<User, Role>groupingBy(User::getRole));
    }

    @Override
    public double getAverageRating(List<User> users) {
       var average = users.stream().mapToDouble(user -> user.getRating()).average().orElse(Double.NaN);
       return average;
    }
}
