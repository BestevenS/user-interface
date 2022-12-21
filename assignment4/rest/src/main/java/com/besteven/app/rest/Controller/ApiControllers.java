package com.besteven.app.rest.Controller;

import com.besteven.app.rest.Repo.*;
import com.besteven.app.rest.Models.*;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
public class ApiControllers {

    @Autowired
    private UserRepo userRepo;
    @Autowired
    private TripRepo tripRepo;

    @GetMapping(value = "/")
    public String getPage(){
        return "Welcome";
    }


    // Users

    // get Users
    // GET /api/v1/users
    @GetMapping(value = "/users")
    public List<User> getUsers(){
        return userRepo.findAll();
    }

    // save User
    // POST /api/v1/users
    @PostMapping(value = "/users")
    public String saveUser(@RequestBody User user){
        userRepo.save(user);
        return "User saved...";
    }

    // GET /api/v1/users/{userId}
    @GetMapping(value = "/users/{userId}")
    public User getUser(@PathVariable  long userId){
        return userRepo.findById(userId).get();
    }

    // update User
    // PUT /api/v1/users/{userId}
    @PutMapping(value = "/users/{userId}")
    public String updateUser(long userId, @RequestBody User user){
        User updatedUser = userRepo.findById(userId).get();
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
        return "User updated...";
    }

    // delete User
    // DELETE /api/v1/users/{userId}
    @DeleteMapping(value = "/users/{userId}")
    public String deleteUser(@PathVariable long userId){
        User deleteUser = userRepo.findById(userId).get();
        userRepo.delete(deleteUser);
        return "Delete user with the id: " + userId;
    }


    // Trip

    // get trips
    // GET /api/v1/trips
    @GetMapping(value = "/trips")
    public List<Trip> getTrips(){
        return tripRepo.findAll();
    }

    // save Trip
    // POST /api/v1/trips
    @PostMapping(value = "/trips")
    public String saveTrip(@RequestBody Trip trip){
        tripRepo.save(trip);
        return "Trip saved...";
    }

    // GET /api/v1/trips/{tripID}
    @GetMapping(value = "/trips/{tripID}")
    public Trip getTrip(@PathVariable  long tripID){
        return tripRepo.findById(tripID).get();
    }

    // update Trip
    // PUT /api/v1/trips/{tripID}
    @PutMapping(value = "/trips/{tripID}")
    public String updateTrip(long tripID, @RequestBody Trip trip){
        Trip updatedTrip = tripRepo.findById(tripID).get();

        updatedTrip.setFromCity(trip.getFromCity());
        updatedTrip.setToCity(trip.getToCity());
        updatedTrip.setFromDate(trip.getFromDate());
        updatedTrip.setToDate(trip.getToDate());
        tripRepo.save(updatedTrip);

        return "Trip entity updated...";
    }

    // delete Trip
    // DELETE /api/v1/trips/{tripID}
    @DeleteMapping(value = "/trips/{tripID}")
    public String deleteTrip(@PathVariable long tripID){
        Trip deleteTrip = tripRepo.findById(tripID).get();
        tripRepo.delete(deleteTrip);
        return "Delete trip entity with the tripID: " + tripID;
    }
}
