package com.besteven.app.rest.Controller;

import com.besteven.app.rest.Models.User;
import com.besteven.app.rest.Repo.UserRepo;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
public class ApiControllers {

    @Autowired
    private UserRepo userRepo;

    @GetMapping(value = "/")
    public String getPage(){
        return "Welcome";
    }

    @GetMapping(value = "/users")
    public List<User> getUsers(){
        return userRepo.findAll();
    }

    @PostMapping(value = "/save")
    public String saveUser(User user){
        userRepo.save(user);
        return "Saved...";
    }

    @PutMapping(value = "update/{id}")
    public String updateUser(long id, @RequestBody User user){
        User updatedUser = userRepo.findById(id).get();
        updatedUser.setUsername(user.getUsername());
        updatedUser.setPwd(user.getPwd());
        updatedUser.setFirstname(user.getFirstname());
        updatedUser.setLastname(user.getLastname());
        updatedUser.setStreet(user.getStreet());
        updatedUser.setCity(user.getCity());
        updatedUser.setPostalCode(user.getPostalCode());
        updatedUser.setCountry(user.getCountry());
        updatedUser.setPhoneNumber(user.getPhoneNumber());
        updatedUser.setBirthDate(user.getBirthDate());
        updatedUser.setSex(user.getSex());
        userRepo.save(updatedUser);
        return "Updated...";
    }

    @DeleteMapping(value = "/delete/{id}")
    public String deleteUser(@PathVariable long id){
        User deleteUser = userRepo.findById(id).get();
        userRepo.delete(deleteUser);
        return "Delete user with the id: " + id;
    }

}
