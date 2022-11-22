package org.example;

import org.example.model.*;
import org.example.model.creators.UserCreator;

import java.lang.reflect.InvocationTargetException;
import java.time.Duration;
import java.time.LocalDateTime;
import java.util.stream.Collectors;

public class Main {
    public static void main(String[] args) throws InvocationTargetException, InstantiationException, IllegalAccessException {
        System.out.println("Zaczynamy. Życzę powodzenia :)");
        var users = SampleUsers.listOfUsers;
        UserCreator userCreator = new UserCreator();
        User user = new UserCreator().create();
        userCreator.assignRoleToUser(user, Role.VIP);
        ClassInitiator userInitiator = new ClassInitiator(User.class);
        User user2 = (User) userInitiator.createObject();


    }

    public static double getAverageRatingOfActiveVipUsers()
    {
        UsersSearch us = new UsersSearch();
        return us.getAverageRating(SampleUsers.listOfUsers.stream().filter(user -> user.getRole() == Role.VIP && user.isActive()).collect(Collectors.toList()));
    }

    public static void deactivateInternalUsersLastSeenYearAgo(){
        for (User user : SampleUsers.listOfUsers){
            if(Duration.between(user.getLastSeen(), LocalDateTime.now()).toDays()>365);
            user.setActive(false);
        }
    }
}