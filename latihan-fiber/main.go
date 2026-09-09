package main

import (
	"log"

	"github.com/gofiber/fiber/v3"
)

func main() {
	app := fiber.New()

	app.Get("/", func(c fiber.Ctx) error {
		return c.SendString("Hallo pemrogamanan web 2")
	})

	app.Get("/api/info", func(c fiber.Ctx) error {
		return c.JSON(fiber.Map{
			"aplikasi": "latihan-fiber",
			"versi":    "1.0.0",
			"status":   "berjalan",
		})
	})

	app.Get("/api/mahasiswa", func(c fiber.Ctx) error {
		return c.JSON(fiber.Map{
			"nim":           "H1H024026",
			"nama":          "Javier Anthonio Justiansah",
			"program_studi": "Teknik Komputer",
		})
	})

	log.Fatal(app.Listen(":3000"))
}
