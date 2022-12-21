package com.besteven.app.rest.Repo;

import com.besteven.app.rest.Models.Trip;
import org.springframework.data.jpa.repository.JpaRepository;

public interface TripRepo extends JpaRepository<Trip, Long> {
}
