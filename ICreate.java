package org.example.model;

public interface ICreate<TObj extends IHaveRoles>{
    TObj create();
    void assignRoleToUser(User user, Role role);
}
