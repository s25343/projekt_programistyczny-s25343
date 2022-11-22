package org.example.model;

import java.lang.reflect.Constructor;
import java.lang.reflect.InvocationTargetException;

public class ClassInitiator {
    Class clazz;

    public ClassInitiator(Class<?> clazz) {
        this.clazz = clazz;
    }

    boolean haveDefaultConstructor() {
        for (Constructor constructor : clazz.getDeclaredConstructors()) {
            if (constructor.getParameters().length == 0)
                return true;
        }
        return false;
    }

    public Object createObject() throws InvocationTargetException, InstantiationException, IllegalAccessException {
        Constructor<?> constructor = this.getConstructor(Class.class);
        Object myObj = null;
        return myObj;
    }

    private Constructor<?> getConstructor(Class<Class> classClass) {
        return null;
    }

    Object initiateObject() {
        if (this.getClass().isAnnotationPresent(Init.class))
            clazz.getDeclaredMethods().getClass();
        return null;
    }
}
