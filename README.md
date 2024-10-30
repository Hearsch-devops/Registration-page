This project automates the build, test, and deployment pipeline for Java applications using Jenkins (Continuous Integration and Deployment), Maven (Build Tool), and Docker (Containerization). The setup enables efficient CI/CD practices, ensuring code quality and rapid deployment.

Pipeline Stages:

. Build: Jenkins triggers Maven to compile the code and run tests.
. Test: Maven executes unit and integration tests, with Jenkins capturing the results.
. Package and Containerize: Jenkins uses Docker to build an image of the packaged application.
. Deploy: Jenkins pushes the Docker image to a container registry and/or deploys it to a testing/staging environment.


