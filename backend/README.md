# Valorant API

A RESTful Laravel API serving Valorant agent and ability data.

## Radiant Team 

- Alex Nguyen (Actually a Silver)
- Andrea Do (Also a Silver)

## Setup

### Backend

1. Navigate to the backend folder:
```
   cd backend
```

2. Install dependencies:
```
   composer install
```

3. Copy the environment file and update your database credentials:
```
   cp .env.example .env
```

4. Update the following values in `.env` to match your environment:
```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=8889
   DB_DATABASE=valorant_db
   DB_USERNAME=root
   DB_PASSWORD=root
```

5. Generate the application key:
```
   php artisan key:generate
```

6. Run migrations and seed the database:
```
   php artisan migrate
   php artisan db:seed
```

7. Start the development server:
```
   php artisan serve
```

### Frontend

Coming soon.

## API Endpoints

### Agents

| Method | Endpoint            | Description          |
|--------|---------------------|----------------------|
| GET    | /api/agents         | List all agents      |
| POST   | /api/agents         | Create a new agent   |
| GET    | /api/agents/{agent} | Get a single agent   |
| PATCH  | /api/agents/{agent} | Update an agent      |
| DELETE | /api/agents/{agent} | Delete an agent      |

### Abilities

| Method | Endpoint                | Description            |
|--------|-------------------------|------------------------|
| GET    | /api/abilities          | List all abilities     |
| POST   | /api/abilities          | Create a new ability   |
| GET    | /api/abilities/{ability}| Get a single ability   |
| PATCH  | /api/abilities/{ability}| Update an ability      |
| DELETE | /api/abilities/{ability}| Delete an ability      |

## Filters

- **Search agents by name:** `/api/agents?name=jett`
- **Filter agents by role:** `/api/agents?role=Duelist`
- **Filter abilities by type:** `/api/abilities?type=ultimate`
- **Filter abilities by agent:** `/api/abilities?agent_id=1`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
