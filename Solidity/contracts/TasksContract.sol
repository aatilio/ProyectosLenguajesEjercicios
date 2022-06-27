// SPDX-License-Identifier: MIT
pragma solidity ^0.8.6;

contract TasksContract {

    uint contador = 0;

    struct Task {
        uint id;
        string title;
        string description;
        bool done;
        uint256 createdAt;
    }

    mapping (uint256 => Task) public tasks;

    function createTask(string memory _title, string memory _description) public {
        tasks[contador] = Task(contador, _title, _description, false, block.timestamp);
        contador++;
    }

    // function toggleDone(){
        
    //}
}

