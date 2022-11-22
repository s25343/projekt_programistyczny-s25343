package org.example.model.creators;

import org.example.model.ICreate;
import org.example.model.Role;
import org.example.model.User;

import java.time.LocalDateTime;

public class UserCreator implements ICreate<User> {
    User user;
    @Override
    public User create() {
        User user = new User();
        user.setUsername("s27116_MariiaKondak");
        user.setActive(true);
        user.setLastSeen(LocalDateTime.now());
        user.setRating(5.0);
        return user;
    }

    @Override
    public void assignRoleToUser(User user, Role role) {
        user.setRole(role);
    }
}
